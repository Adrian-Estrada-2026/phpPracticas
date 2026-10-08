<?php 
class Course
{
public function __construct(
    protected string $title,
    protected string $subtitle,
    protected string $description,
    protected array $tags

    ){
    
    }

    public function getTitle(): string
    {
        return $this->title;
    }
     public function getSubtitle(): string
    {
        return $this->subtitle;
    }
        public function getDescription(): string
    {
        return $this->description;
    }
        public function getTags(): array
    {
        return $this->tags;
    }

    public function addTag (string $tag):void 
    {
        if (in_array($tag, $this->tags)){                   // Evita duplicados
            return;
        }
        if (empty($tag)){                                  //Si existe un tag vacio no se muestra
            return;
        }
        if (count($this->tags) >=5){                       //No muestra mas de 5 tags
            return;
        }
        $this->tags[] = $tag;
    }
}