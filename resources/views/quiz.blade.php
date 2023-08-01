@extends('layouts.app')

@section('title','Quiz Rest Api Demo')
  
@section('content')
    <div class="container">
        <div class="row m-20 p-10">
            <table id="example" class="table table-striped" style="width:100%">
                <h2 class="text-center mt-4 text-info">Quiz Question and answers</h2>
                <thead>
                    <tr>
                        <th scope="col">Question</th>
                        <th scope="col">A1</th>
                        <th scope="col">B1</th>
                         <th scope="col">C1</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $question)
                    <tr>
                        <th scope="row">{{$question->question}}</th>
                        <td>{{$question->answer_a}}</td>
                        <td>{{$question->answer_b}}</td>
                        <td>{{$question->answer_c}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
@section('script')
    <script>
        
    </script>
@endsection

