@extends('layouts.layout')

@section('content')

    <main>

        <!--? slider Area Start-->

        @include('homepage.cover')

        <!-- slider Area End-->

        <!--? About Start-->

        @include('homepage.section2')

        <!-- About  End-->

        <!--? department_area_start  -->

        @include('homepage.section3')

        <!-- depertment area end  -->

        <!--? All startups Start -->

        @include('homepage.section5')

        <!--All startups End -->

    </main>
    
@endsection