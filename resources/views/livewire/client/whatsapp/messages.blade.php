<div class="direct-chat direct-chat-primary">
    @foreach ( $whatsappConversationList as $message)
    @if($message->type == "incoming")
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">{{$message->contact}}</span>
            <span class="direct-chat-timestamp float-right">{{explode(" ",$message->currentDate)[0]."   ".$message->date}}</span>
            </div>

            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                {{$message->message}}
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->
    @else
        <!-- Message to the right -->
        <div class="direct-chat-msg right">
            <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">{{\App\Models\Phone::where('imei',$phoneImei)->first()->readable_name}}</span>
            <span class="direct-chat-timestamp float-left">{{explode(" ",$message->currentDate)[0]."   ".$message->date}}</span>
            </div>
            <!-- /.direct-chat-img -->
            <div class="direct-chat-text">
                {{$message->message}}
            </div>
            <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

    @endif

    @endforeach
</div>
