<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Foo
 * @ORM\Table("foo")
 * @ORM\Entity
 */
class Foo
{
    public const TITLE_MIN_LENGTH = 5;
    public const TITLE_MAX_LENGTH = 60;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = Foo::TITLE_MIN_LENGTH,
     *      max = Foo::TITLE_MAX_LENGTH,
     *      minMessage = "Title must be at least {{ limit }} characters",
     *      maxMessage = "Title may not contain more than {{ limit }} characters"
     * )
     */
    protected $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
