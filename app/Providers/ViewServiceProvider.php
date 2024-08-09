<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('partials.menu', function ($view) {
            $categories = Category::where('status', 1)
                ->orderBy('sort', 'asc') // 按照 sort 欄位進行升序排序
                ->get();
            $tree = $this->buildCategoryTree($categories);
            $view->with('menu', $tree);
        });
    }

    private function buildCategoryTree($categories, $parentId = 0)
    {
        $branch = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildCategoryTree($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                }

                $branch[] = $category;
            }
        }

        return $branch;
    }
}
