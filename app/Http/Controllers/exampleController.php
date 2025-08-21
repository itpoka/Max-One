<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exampleController extends Controller
{

    public function view_home()
    {
      return view('frontend.pages.home');
    }
    public function view_contact()
    {
      return view('frontend.pages.contact');
    }
    public function view_about()
    {
      
      return view('frontend.pages.about');
    }
     public function view_at_a_Glance()
    {
      
      return view('frontend.pages.at_a_Glance');
    }

      public function view_leadership()
    {
      
      return view('frontend.pages.leadership');
    }


       public function view_ourvalues()
    {
      
      return view('frontend.pages.ourvalues');
    }

       public function view_diversity()
    {
      
      return view('frontend.pages.diversity');
    }


       public function view_ourhistory()
    {
      
      return view('frontend.pages.ourhistory');
    }


       public function view_ourStrategy()
    {
      
      return view('frontend.pages.ourStrategy');
    }

        public function view_motoEngine()
    {
      
      return view('frontend.pages.motorcycleEngineOils');
    }

        public function view_carEngine()
    {
      
      return view('frontend.pages.carEngineOils');
    }

         public function view_productView()
    {
      
      return view('frontend.pages.productView');
    }

     public function view_distributor()
    {
      
      return view('frontend.pages.distributor');
    }

     public function view_chooseProduct()
    {
      
      return view('frontend.pages.chooseProduct');
    }

    public function view_openCard()
    {
      
      return view('frontend.pages.openCard');
    }

       public function view_checkout()
    {
      
      return view('frontend.pages.checkout');
    }
}
