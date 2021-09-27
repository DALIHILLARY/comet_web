<div class="direct-chat direct-chat-primary">
    @foreach ( $smsConversationList as $message)
    @if($message->type == "incoming")
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
            <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">{{$message->contact}}</span>
            <span class="direct-chat-timestamp float-right">{{$message->date}}</span>
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
            <span class="direct-chat-name float-right">ME</span>
            <span class="direct-chat-timestamp float-left">{{$message->date}}</span>
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
