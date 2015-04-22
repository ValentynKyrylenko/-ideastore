<?php namespace App\Providers;

use App\Article;
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
            $view->with('latest_articles', Article::orderBy('created_at', 'DESC')->take(10)->get());
        });
    }

}
