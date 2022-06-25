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
                                <textarea name="" id="commentbox1" cols="40" rows="20" class="form-control" style="line-height: 0.7;" readonly>
                                    @foreach ($comment_contents as $comment_content) 
                                    {{$comment_content}}
                                    @endforeach
                                </textarea>
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
                                <textarea name="" id="commentbox2" cols="40" rows="20" class="form-control" style="line-height: 0.7;" readonly>
                                    @foreach ($comment_contents as $comment_content) 
                                    {{"\\". $loop->index +1 . " " .$comment_content}}
                                    @endforeach
                                </textarea>
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
        let commentbox1 = document.getElementById('commentbox1');
        let commentbtn1 = document.getElementById('commentBtn1');

        commentbtn1.onclick = function() {
            commentbox1.select();
            document.execCommand("copy");
        }

        let commentbox2 = document.getElementById('commentbox2');
        let commentbtn2 = document.getElementById('commentBtn2');

        commentbtn2.onclick = function() {
            commentbox2.select();
            document.execCommand("copy");
        }
    </script>
<x-footer />