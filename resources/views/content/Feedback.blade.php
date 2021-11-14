@extends('layout.main2')

@section('title', 'Feedback')

@section('content')

<div class="feedback">

    <div class="feedback-title">
        <h2> Feedback </h2>
    </div>

    <!-- Ini buat chat box nya -->
    <div class="chat-box">
        <div class="client">
            <img src="{{ url('../image/none.png') }}" alt="logo">
            <div class="client-info">
                <h2> Nephy Kyun </h2>
                <p> Online </p>
            </div>
        </div>

        <div class="chats">
            <div class="client-chat"> Hi! </div>
            <div class="my-chat"> Hi! </div>
            <div class="client-chat"> Whats Up </div>
            <div class="my-chat"> Great Day With this app hahahaha</div>
        </div>

        <div class="chat-input">
            <input type="text" placeholder="Enter Massage">
            <button class="send-btn">
                <img src="{{ url('../image/none.png') }}" alt="">
            </button>
        </div>
    </div>

    <!-- Ini list yg feedback -->
    <div class="feedback-act-table">
        <ul>
            <li>
                <div class="feedback-act-content">
                    <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                    <div class="feedback-act-txt">
                        <h4>Nephy Kyun</h4>
                        <div class="feedback-act-reply">
                            <p> Great Day With This App Hahahaha </p>
                        </div>
                    </div>
                    <div class="feedback-act-span">
                        <span><a class="fas fa-reply" href="#"></a></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="feedback-act-content">
                    <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                    <div class="feedback-act-txt">
                        <h4>Nephy Kyun</h4>
                        <div class="feedback-act-reply">
                            <p> Great Day With This App Hahahaha </p>
                        </div>
                    </div>
                    <div class="feedback-act-span">
                        <span><a class="fas fa-reply" href="#"></a></span>
                    </div>
                </div>
            </li>
            <li>
                <div class="feedback-act-content">
                    <img src="{{ url('../image/none.png') }}" alt="" id="act-image">
                    <div class="feedback-act-txt">
                        <h4>Nephy Kyun</h4>
                        <div class="feedback-act-reply">
                            <p> Great Day With This App Hahahaha </p>
                        </div>
                    </div>
                    <div class="feedback-act-span">
                        <span><a class="fas fa-reply" href="#"></a></span>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>

@endsection