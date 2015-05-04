<?php namespace App\Providers;

use App\Article;
use App\Product;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->composeNavigation();
        $this->composeTags();
        $this->composeRecent();
        $this->composeProducts();
    }

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

    private function composeNavigation()
    {
        view()->composer('partials._navigation', function ($view) {
            $view->with('latest', Article::latest()->first());
        });
    }

    private function composeTags()
    {
        view()->composer('side_content.tags', function ($view) {
            $view->with('tags', Tag::all());
        });
    }

    private function composeRecent()
    {
        view()->composer('side_content.recent', function ($view) {
            $view->with('latest_articles', Article::orderBy('created_at', 'DESC')->published()->take(5)->get());
        });
    }

    private function composeProducts()
    {
        view()->composer('side_content.products', function ($view) {
            $view->with('latest_products', Product::orderBy('created_at', 'DESC')->published()->take(5)->get());
        });
    }

}
