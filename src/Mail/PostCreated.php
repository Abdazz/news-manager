<?php
namespace Abdazz\PostsManager\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $post_id;
    public $title;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post_id, $title)
    {
        $this->post_id=$post_id;
        $this->title=$title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('posts-manager::emails.posts.created')->with(["post_id"=>$this->post_id, "title"=>$this->title]);
    }
}
