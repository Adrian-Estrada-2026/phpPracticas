<?php 
require 'CourseType.php';
class Course
{
public function __construct(
    protected string $title,
    protected string $subtitle,
    protected string $description,
    protected array $tags,
    protected CourseType $type = CourseType::FREE,// Programamos que sea de type free,paid
    ){
    
    }

    public function __get ($name)
    {
        if(property_exists($this,$name)){      //Busca el nombre dentro del contexto y si existe vamos a retornarlo (Esto remplaza los 4 metodos anteriores mencionados en el 07..)
            return $this->$name;
        }
        return null;
    }

    public function __toString()
    {
        $html = "<h1>{$this->title} - {$this->type->label()}</h1>";
        $html .= "<h2>{$this->subtitle}</h2>";
        $html .= "<p>{$this->description}</p>";
        $html .= "<h3>Tags:</h3>";
        $html .="<ul>";
         foreach ($this->tags as $tag){
            $html .="<li>{$tag}</li>";
         }    
         $html .="</ul>";

         return $html;
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