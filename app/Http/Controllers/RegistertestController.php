<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use Session;


class RegistertestController extends Controller
{
    public function index()
    {
        return view('/login/register1');
    }

    public function store(Request $request)
    {
        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'checkbox' => 'required',
        ];
        $messages = [
            'firstname.required' => 'firstname là trường bắt buộc',
            'firstname.max' => 'Họ và tên không quá 255 ký tự',
            'lastname.required' => 'lastname là trường bắt buộc',
            'lastname.max' => 'Họ và tên không quá 255 ký tự',
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không quá 255 ký tự',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            'checkbox.required' => 'Ban Chua dong y dieu khoan'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang đăng nhập và thông báo lỗi
            Session::flash('note', 'Đăng ký Khong thành công!');
            return redirect('/registeruser')->withErrors($validator)->withInput();
        } else {
            
            User::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'numberphone' => $request->input('numberphone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'permission' => $request->input('permission'),
            'password' => bcrypt($request->input('password')),
            ]);
            
            Session::flash('success', 'Đăng ký thành viên thành công!');
            return redirect('/');
        }
    }
}
