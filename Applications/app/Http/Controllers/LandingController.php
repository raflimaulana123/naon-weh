<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'tittle' => 'Semangat gais',
            'greeting' => 'Sahabat BK adalah web yang berguna untuk konsultasi siswa di masa pandemi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum possimus, dolorum architecto voluptates, hic veritatis labore consectetur saepe ullam eos doloremque. Autem a aperiam distinctio molestiae dignissimos incidunt officiis explicabo cupiditate modi. A, laboriosam eos. Nostrum animi illum assumenda quos? Unde sequi accusamus ipsam officiis veniam laboriosam similique maxime deserunt cupiditate esse ullam magnam rerum, non autem vero adipisci quaerat! Iure dolor nemo, possimus veniam nesciunt quas at numquam quo quae nobis autem impedit facere cum veritatis. Esse, quidem maxime nobis neque deserunt recusandae obcaecati. Amet molestias, pariatur qui eligendi distinctio dolorem aliquid iste. Nulla harum id dolor. Ut quia accusantium voluptas enim facilis harum tenetur repellat mollitia officiis, nesciunt exercitationem qui eaque, veritatis doloribus repellendus soluta hic ipsum odit reiciendis cumque perferendis sint quos omnis? Earum aperiam, tempora nobis architecto asperiores consequatur quae aut ipsum reiciendis maiores, voluptatibus ut consectetur molestiae non sequi dolor quo cum temporibus? Neque, atque. Rerum nisi sapiente repudiandae voluptas nostrum error unde qui laudantium quo fugit doloribus culpa quia adipisci velit nam atque, cum officiis dolore totam. Error laborum dignissimos quasi, incidunt consequatur enim dolores. Iste sit eaque unde esse sint libero itaque, praesentium, voluptatibus eius maxime sunt sapiente? Aliquam cumque aspernatur praesentium maxime unde a non magnam eligendi fuga tenetur omnis expedita, rem blanditiis, itaque nesciunt sit assumenda ut deserunt vel nostrum accusamus? Sunt officia sint perferendis omnis totam libero nesciunt officiis esse molestias odit, dolorum accusamus minima rerum cumque exercitationem nulla vitae! Magnam, iusto iure. Quae nemo molestias, quam nesciunt facilis quo?',

        ];
        return view('home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
