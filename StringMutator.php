<?php

namespace Mutator;
use PostInterface;
class PostMutator
{
private $post;
public function __construct(PostInterface $post)
{
$this->post = $post;
}
public function getBoldTitle()
{
return StringMutator::bold($this->post->getTitle());
}
public function getItalicContent()
{
return StringMutator::italic($this->post->getContent
());
}
}

require __DIR__.'/PostInterface.php';
require __DIR__.'/Post.php';
require __DIR__.'/PostMutator.php';
require __DIR__.'/StringMutator.php';
use Mutator\PostMutator;
$post = new Post('Belajar OOP', 'Saya sedang belajar OOP PHP'
);
$mutator = new PostMutator($post);
echo $mutator->getBoldTitle();

?>