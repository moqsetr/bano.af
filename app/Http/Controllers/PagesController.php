<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function getHome()
   {
   	return view('home');
   }
   public function getAbout()
   {
   	return view('About');
   }
   public function getBlogDetail()
   {
   	return view('Blog-detail');
   }
   public function getCart()
   {
   	return view('Cart');
   }
   public function getContact()
   {
   	return view('contact');
   }
   public function getProduct()
   {
   	return view('product');
   }
   public function getProductDetail()
   {
   	return view('product-detail');
   }
   public function getBlog()
   {
   	return view('Blog');
   }

}
