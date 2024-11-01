<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all(); // Получаем все заявки
        return view('applications.index', compact('applications')); // Возвращаем представление с заявками
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'proposal' => 'required|string',
    ]);

    Application::create($request->all()); // Создаем новую заявку
    return response()->json(['success' => 'Заявка успешно отправлена!']); // Возвращаем успешный ответ
}
}
