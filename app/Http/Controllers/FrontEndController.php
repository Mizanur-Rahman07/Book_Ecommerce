<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
  public function index() {
    return view('frontEnd.home.home');
  }

  public function islamikBook() {
    return view('frontEnd.book.islamik_book');
  }
  public function kidsBook() {
    return view('frontEnd.book.kids_book');
  }
  public function kidsZone() {
    return view('frontEnd.kids_zone.kids_zone');
  }
  public function kasmeriShal() {
    return view('frontEnd.fassion.kasmeri_shal');
  }
  public function authors() {
    return view('frontEnd.authors.author');
  }
  public function userLogin() {
    return view('frontEnd.users.user_login');
  }
  public function userRegistration() {
    return view('frontEnd.users.user_registration');
  }
}
