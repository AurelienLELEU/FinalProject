<?php // permet de gerer UN article specifiquement

class Post
{
    private $id;
    private $id_image;
    private $title;
    private $content;
    private $created_at;
    private $user_id;
    private $user_name;


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $cle => $valeur) {
            $methode = 'set' . ucfirst($cle);
            if (method_exists($this, $methode)) {
                $this->$methode($valeur);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        if ($id > 0) {
            $this->id = $id;
            return $this;
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
            return $this;
        }
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        if (is_string($content)) {
            $this->content = $content;
            return $this;
        }
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getId_image()
    {
        return $this->id_image;
    }

    public function setId_image($id_image)
    {
        $this->id_image = $id_image;
        return $this;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    public function getUser_name()
    {
        return $this->user_name;
    }

    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }
}
