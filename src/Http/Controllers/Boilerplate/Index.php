<?php

namespace JoeriAbbo\Boilerplate\Http\Controllers\Boilerplate;

use Illuminate\View\View;
use JoeriAbbo\Boilerplate\Http\Controllers\Controller;
use JoeriAbbo\Boilerplate\Http\Requests\Languages\IndexRequest;
use JoeriAbbo\Boilerplate\BoilerplatePackageServiceProvider as Provider;

class Index extends Controller
{
    /**
     * @param IndexRequest $request
     * @return View
     */
    public function __invoke(IndexRequest $request,): View
    {
        return view(Provider::PACKAGE_NAME . '::pages.index');
    }
}
