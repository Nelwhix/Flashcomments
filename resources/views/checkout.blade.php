<x-header />
    <section class="my-5">
        <div class="container">
            <h2 class="text-center">
                Checkout
            </h2>
            <div class="my-3 d-flex gap-2 justify-content-center">
                <h3>Total: {{$comments_num}}</h3>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container">
                <div class="d-flex gap-3 justify-content-center">
                <h2 class="">Your Comment List</h2>
               
                </div>
                <div class="row">
                    <div class="col">
                        @unless(count($comment_contents) == 0)
                        <div class="my-5">
                            <div class="my-3 text-center">
                                <button class="btn btn-primary my-2" id="commentBtn1">
                                    Copy All</button>
                                <div class="" id="commentbox1" style="background-color:#e9ecef">
                                    @foreach ($comment_contents as $comment_content) 
                                        <p>{{$comment_content}}</p>
                                    @endforeach
                                </div>
                            </div>
                                </div>
                                </div>
                                @else 
                                <p>No Comments found</p>
                                @endunless
                    </div>
                    <div class="col">
                        @unless(count($comment_contents) == 0)
                        <div class="my-5">
                            <div class="my-3 text-center">
                                <button class="btn btn-primary my-2" id="commentBtn2">
                                    Copy All</button>
                                <div class="" id="commentbox2" style="background-color:#e9ecef">
                                    @foreach ($comment_contents as $comment_content) 
                                        <p>{{"\\". $loop->index +1 . " " .$comment_content}}</p>
                                    @endforeach
                                </div>
                            </div>
                                </div>
                                </div>
                                @else 
                                <p>No Comments found</p>
                                @endunless
                    </div>
                </div>
                
                
                
            </div>
        </section>
    <script>
        //grab the textboxes
        let commentBox1 = document.getElementById('commentbox1');
        let commentBox2 = document.getElementById('commentbox2');

        //grab the copy buttons
        let commentBtn1 = document.getElementById('commentBtn1');
        let commentBtn2 = document.getElementById('commentBtn2');

        commentBtn1.addEventListener('click', () => {
            let range = document.createRange();
            range.selectNode(document.getElementById('commentbox1'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
        });

        commentBtn2.addEventListener('click', () => {
            let range = document.createRange();
            range.selectNode(document.getElementById('commentbox2'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
        });


    </script>
<x-footer />