@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="section section-ld">
    <div class="container mb-4">
        <h3 class=" text-center">Konsultasi</h3>
        <div class="messaging">
        <div class="inbox_msg">
            <!-- <div class="inbox_people">
            <div class="headind_srch">
                <div class="recent_heading">
                <h4>Recent</h4>
                </div>
                <div class="srch_bar">
                <div class="stylish-input-group">
                    <input type="text" class="search-bar"  placeholder="Search" >
                    <span class="input-group-addon">
                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                    </span> </div>
                </div>
            </div>
            <div class="inbox_chat">
                <div class="chat_list active_chat">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
                <div class="chat_list">
                <div class="chat_people">
                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                    <div class="chat_ib">
                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                    <p>Test, which is a new approach to have all solutions 
                        astrology under one roof.</p>
                    </div>
                </div>
                </div>
            </div> -->
            </div>
            <div class="mesgs">
            <div class="msg_history">
                <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                    <p>Selamat Pagi Admin</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span></div>
                </div>
                </div>
                <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>Selamat Siang Pengguna, ada yang bisa kami bantu ?</p>
                    <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                </div>
                <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                    <p>Saya ingin bertanya, bagaimana prosedur masuk perpustakaan upi ?</p>
                    <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
                </div>
                </div>
                <div class="outgoing_msg">
                <div class="sent_msg">
                    <p>Anda masuk ke ruangan loker, simpan barang anda disana, kemudian masuk dengan KTM
                    </p>
                    <span class="time_date"> 11:01 AM    |    Today</span> </div>
                </div>
                <div class="incoming_msg">
                <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="received_msg">
                    <div class="received_withd_msg">
                    <p>Teimakasih atas bantuannya.</p>
                    <span class="time_date"> 11:01 AM    |    Today</span></div>
                </div>
                </div>
            </div>
            <hr>
            <div class="type_msg mb-4">
                <div class="input_msg_write">
                <input type="text" class="write_msg" placeholder="Type a message" />
                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div>
            </div>
        </div>
        
    
        
        </div>
    </div>
</section>

@endsection
