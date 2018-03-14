@extends('layouts.app')

@section('content')
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div id="app">
                    	<div class="card-header">ChatApp
                            <span class="badge pull-right">@{{ usersInRoom.length }}</span>
                        </div>
                    	<div class="card-body">
                        	<chat-log :messages="messages"></chat-log>	
							<chat-composer v-on:messagesent="addMessage"></chat-composer>		
                    	</div>
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection
