<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __invoke(): View
    {
        $configKey = app()->getLocale() === 'fr' ? 'portfolio_fr' : 'portfolio';
        $portfolio = config($configKey, config('portfolio'));

        return view('portfolio', [
            'portfolio' => $portfolio,
            'profile' => $portfolio['profile'] ?? [],
            'about' => $portfolio['about'] ?? [],
            'experiences' => $portfolio['experiences'] ?? [],
            'projects' => $portfolio['projects'] ?? [],
            'caseStudies' => $portfolio['case_studies'] ?? [],
            'skills' => $portfolio['skills'] ?? [],
            'statistics' => $portfolio['statistics'] ?? [],
            'socialLinks' => $portfolio['social_links'] ?? [],
        ]);
    }
}
