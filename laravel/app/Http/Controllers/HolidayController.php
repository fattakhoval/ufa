<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holiday::all(); // Получаем все посты
        return view('news', compact('holidays')); // Возвращаем представление с постами
    }

    public function create()
    {
        return view('createnews'); // Возвращаем представление с формой создания поста
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Holiday::create($request->all()); // Создаем новый пост
        return redirect()->route('holidays.index')->with('success', 'Пост успешно создан!'); // Перенаправляем с сообщением об успехе
    }

    public function edit($id)
    {
        $holiday = Holiday::findOrFail($id); // Находим пост по ID
        return view('holidays.edit', compact('holiday')); // Возвращаем представление с формой редактирования
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $holiday = Holiday::findOrFail($id); // Находим пост по ID
        $holiday->update($request->all()); // Обновляем пост
        return redirect()->route('holidays.index')->with('success', 'Пост успешно обновлен!'); // Перенаправляем с сообщением об успехе
    }

    public function destroy($id)
    {
        $holiday = Holiday::findOrFail($id); // Находим пост по ID
        $holiday->delete(); // Удаляем пост
        return redirect()->route('holidays.index')->with('success', 'Пост успешно удален!'); // Перенаправляем с сообщением об успехе
    }
}
