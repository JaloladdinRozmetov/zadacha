<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function task2()
    {
        return view('task2');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function task3()
    {
        return  view('task3');
    }
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $username = $request->input('username');
        session(['username' => $username]);
        return redirect('/');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function task4()
    {
        // Создаем массив с 10 рандомными числами от 0 до 100
        $numbers = array();
        for ($i = 0; $i < 10; $i++) {
            $numbers[] = rand(0, 100);
        }

// Сортируем массив в порядке убывания

rsort($numbers);
        return view('task4',compact('numbers'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function task6()
    {
        return view('task6');
    }

    /**
     * @param $element_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function task5($element_id)
    {
        $categories = array(
            array('id' => 1, 'name' => 'Главная', 'parent_id' => 0),
            array('id' => 2, 'name' => 'Каталог', 'parent_id' => 0),
            array('id' => 3, 'name' => 'Телефоны', 'parent_id' => 2),
            array('id' => 4, 'name' => 'iPhone 6', 'parent_id' => 3),
            array('id' => 5, 'name' => 'iPhone 5', 'parent_id' => 3),
            array('id' => 6, 'name' => 'iPhone 4', 'parent_id' => 3),
            array('id' => 7, 'name' => 'Аксессуары', 'parent_id' => 3),
            array('id' => 8, 'name' => 'Планшеты', 'parent_id' => 2),
            array('id' => 9, 'name' => 'iPad Air', 'parent_id' => 8),
            array('id' => 10, 'name' => 'iPad Mini', 'parent_id' => 8),
            array('id' => 11, 'name' => 'Аксессуары', 'parent_id' => 8),
            array('id' => 12, 'name' => 'Ноутбуки', 'parent_id' => 2),
            array('id' => 13, 'name' => 'Macbook Air', 'parent_id' => 12),
            array('id' => 14, 'name' => 'Macbook Pro', 'parent_id' => 12),
            array('id' => 15, 'name' => 'Аксессуары', 'parent_id' => 12),
            array('id' => 16, 'name' => 'О компании', 'parent_id' => 0)
        );

        $breadcrumbs = $this->get_breadcrumbs($element_id,$categories);

        return view('task5',compact('breadcrumbs','categories'));
    }

    /**
     * @param $category_id
     * @param array $categories
     * @return array
     */
    function get_breadcrumbs($category_id,array $categories) {
        $breadcrumbs = array();
        // Находим текущую категорию
        foreach ($categories as $category) {
            if ($category['id'] == $category_id) {
                $breadcrumbs[] = $category;
                // Находим родительские категории
                $parent_id = $category['parent_id'];
                while ($parent_id > 0) {
                    foreach ($categories as $parent_category) {
                        if ($parent_category['id'] == $parent_id) {
                            array_unshift($breadcrumbs, $parent_category);
                            $parent_id = $parent_category['parent_id'];
                            break;
                        }
                    }
                }
                break;
            }
        }
        return $breadcrumbs;
    }
}
