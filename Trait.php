<?php

// Trait secara singkat adalah copy paste code
trait StringMutator
{
public function bold(string $word): string
{
return sprintf('<b>%s</b>', $word);
}
public function italic(string $word): string
{
return sprintf('<i>%s</i>', $word);
}
public function boldItalic(string $word): string
{
return $this->italic($this->bold($word));
}
}


?>