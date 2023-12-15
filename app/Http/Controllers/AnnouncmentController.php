<?php

namespace App\Http\Controllers;

use App\Http\Requests\SneakerRequest;
use App\Models\Sneaker;

class AnnouncmentController extends Controller
{
    public $scarpe = [ 
        [
            'id'=> 1,
            'img'=> '/img/snks/noblered.jpg',
            'name'=> 'Air Jordan 1 Low Noble Red',
            'category'=> 'Low',
            'price'=> '250',
            'size'=> [38,39,42,44]
        ],
    
        [
            'id'=> 2,
            'img'=> '/img/snks/bluemint.jpg',
            'name'=> 'Air Jordan 1 Mid Blue Mint (GS)',
            'category'=> 'Mid',
            'price'=> '252',
            'size'=> [38,39,42,44]
    
    
        ],
    
        [
            'id'=> 3,
            'img'=> '/img/snks/cyber.jpg',
            'name'=> 'Air Jordan 1 Low Black Cyber',
            'category'=> 'Low',
            'price'=> '175',
            'size'=> [40]
    
        ],
    
        [
            'id'=> 4,
            'img'=> '/img/snks/laserblueblack.jpg',
            'name'=> 'Air Jordan 1 Low Laser Blue Black',
            'category'=> 'Low',
            'price'=> '201',
            'size'=> [38]
    
        ],
    
        [
            'id'=> 5,
            'img'=> '/img/snks/trophy.jpg',
            'name'=> 'Air Jordan 1 Retro High Trophy Room Chicago',
            'category'=> 'High',
            'price'=> '1616',
            'size'=> [37,44]
    
        ],
    
        [
            'id'=> 6,
            'img'=> '/img/snks/taxi.jpg',
            'name'=> 'Air Jordan 1 Mid Taxi',
            'category'=> 'Mid',
            'price'=> '150',
            'size'=> [43,45]
    
        ],
    
        [
            'id'=> 7,
            'img'=> '/img/snks/sepurple.jpg',
            'name'=> 'Air Jordan 1 Mid SE Purple',
            'category'=> 'Mid',
            'price'=> '100',
            'size'=> [38,42]
    
        ],
    
        [
            'id'=> 8,
            'img'=> '/img/snks/universityblue.jpg',
            'name'=> 'Air Jordan 1 Retro High OG University Blue',
            'category'=> 'High',
            'price'=> '415',
            'size'=> [34,35]
    
        ],
        [
            'id'=> 9,
            'img'=> '/img/snks/toeblue.jpg',
            'name'=> 'Air Jordan 1 Retro High OG UNC Toe ',
            'category'=> 'High',
            'price'=> '213',
            'size'=> [35,39,43,47]
        ],
    
        [
            'id'=> 10,
            'img'=> '/img/snks/lowbulls.jpg',
            'name'=> 'Air Jordan 1 Low Bulls',
            'category'=> 'Low',
            'price'=> '147',
            'size'=> [34,38,34,33]
        ],
    
        [
            'id'=> 11,
            'img'=> '/img/snks/basketballblossom.jpg',
            'name'=> 'Air Jordan 1 Low Basketball Blossom (GS)',
            'category'=> 'Low',
            'price'=> '198',
            'size'=> [35,37,44,48]
        ],
    
        [
            'id'=> 12,
            'img'=> '/img/snks/lostfound.jpg',
            'name'=> 'Air Jordan 1 Retro High OG Lost Found ',
            'category'=> 'High',
            'price'=> '155',
            'size'=> [36,38,39,43]
        ],
    
        [
            'id'=> 13,
            'img'=> '/img/snks/lowgolfwhite.jpg',
            'name'=> 'Air Jordan 1 Low Golf White Copa Black',
            'category'=> 'Low',
            'price'=> '145',
            'size'=> [35,38,43,45]
        ],
    
        [
            'id'=> 14,
            'img'=> '/img/snks/aquatone.jpg',
            'name'=> 'Air Jordan 1 Low Aquatone ',
            'category'=> 'Low',
            'price'=> '139',
            'size'=> [40,44]
        ],
    
        [
            'id'=> 15,
            'img'=> '/img/snks/melody.jpg',
            'name'=> 'Air Jordan 1 Mid Melody Ehsani Fearless (W)',
            'category'=> 'Mid',
            'price'=> '2800',
            'size'=> [34,35]
        ],
        [
            'id'=> 16,
            'img'=> '/img/snks/lakers.jpg',
            'name'=> 'Air Jordan 1 Mid Lakers',
            'category'=> 'Mid',
            'price'=> '199',
            'size'=> [38,44]
        ],
        [
            'id'=> 17,
            'img'=> '/img/snks/Air Jordan 1 Low Light Purple.jpg',
            'name'=> 'Air Jordan 1 Low Light Purple',
            'category'=> 'Low',
            'price'=> '190',
            'size'=> [38,44,48]
        ],
        [
            'id'=> 18,
            'img'=> '/img/snks/Air Jordan 1 Retro High Union Los Angeles Black Toe.jpg',
            'name'=> 'Air Jordan 1 Retro High Union Los Angeles Black Toe',
            'category'=> 'High',
            'price'=> '1750',
            'size'=> [34,42,48]
        ],
        [
            'id'=> 19,
            'img'=> '/img/chicago3/1.jpg',
            'name'=> 'Air Jordan 1 Mid Chicago (2021)',
            'category'=> 'Mid',
            'price'=> '240',
            'size'=> [38,44,48]
        ]
        ];
    public function index(){
        $sneakers = Sneaker::all();
        return view('announcments.index', compact('sneakers'));
        //va a prendere tutti i dati dal database e va inserita nella view);
    } 
    public function show($id){
        $sneaker= Sneaker::find($id);
        return view('announcments.show', compact('sneaker'));

    }
    
    public function new(){
        return view('announcments.new',['sneakers'=>$this->scarpe]);
    }
    public function create(){
        return view('announcments.create');
        
    }
    public function store(SneakerRequest $request){
        $img_request=$request->file('img');
        $name_request=$request->input('name');
        $category_request=$request->input('category');
        $price_request=$request->input('price');
        $size_request=$request->input('size');
        /* metodo corretto */
        $sneaker = Sneaker::create(
            ['img'=>$img_request->store('public/img'),
            'name'=>$name_request,
            'category'=>$category_request,
            'price'=>$price_request,
            'size'=>$size_request]
        );
        return redirect(route('annunci.create'))->with('message','Grazie per aver inserito un annuncio');

    }
   
}
