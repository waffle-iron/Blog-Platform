<?php

/**
 * @Entity @Table(name="posts")
 **/
class Post {
  /**
   * @Id @Column(type="integer")
   * @GeneratedValue
   **/
  protected $id;

  /** @Column(type="string") **/
  protected $text;

  public function getId()
  {
    return $this->id;
  }

  public function setText($text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }
}
