<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ExamRequest;
use App\Models\Exam;

class ExamController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:admin');
    }

    public function index()
    {
        $exams = Exam::latest()->get();

        return view('admin.exam_list', compact('exams'));
    }

    public function create()
    {
        return view('admin.exam_create');
    }

    public function postValue(ExamRequest $request)
    {
        $request->session()->put("form_input", $request->all());

        return redirect(route('exams.confirm'));
    }

    public function confirm(Request $request)
    {
        $input = $request->session()->get('form_input');

        if (empty($input)) {
            return redirect()->back();
        } else {
            return view('admin.exam_confirm', compact('input'));
        }
    }

    public function officialPost(Request $request)
    {
        // セッションの全データを変数に代入
        $input = $request->session()->get('form_input');

        // 「修正」か「登録」、どちらのボタンが押されたかで条件分岐
        if ($request->has('fix')) {
            return redirect(route('exams.create'))->withInput($input);
        } elseif ($request->has('register')) {
            Exam::create([
                'title' => $input['title'],
                'start_date' => $input['start_date'],
                'end_date' => $input['end_date'],
                'category' => $input['category'],
                'type' => $input['type']
            ]);
            // セッションの全データを削除
            $request->session()->forget('form_input');

            return redirect(route('exams.index'));
        }
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect()->back();
    }
}
