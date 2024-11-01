<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all(); // Получаем все заявки
        return view('admin.allProducts', ['prods' => $applications]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'proposal' => 'required|string',
        ]);

        Application::create($request->all()); // Создаем новую заявку
        // return response()->json(['success' => 'Заявка успешно отправлена!']); // Возвращаем успешный ответ
        return redirect()->route('/');


    }

    public function show($id)
    {
        $application = Application::findOrFail($id); // Находим заявку по ID
        return view('applications.show', compact('application')); // Возвращаем представление с деталями заявки
    }

    public function accept($id)
    {
        $application = Application::findOrFail($id); // Находим заявку по ID
        $application->status = 'accepted'; // Устанавливаем статус как "принята"
        $application->save(); // Сохраняем изменения

        return redirect()->route('applications.index')->with('success', 'Заявка принята!'); // Перенаправляем с сообщением об успехе
    }

    public function reject($id)
    {
        $application = Application::findOrFail($id); // Находим заявку по ID
        $application->status = 'rejected'; // Устанавливаем статус как "отклонена"
        $application->save(); // Сохраняем изменения

        return redirect()->route('applications.index')->with('success', 'Заявка отклонена!'); // Перенаправляем с сообщением об успехе
    }
}
