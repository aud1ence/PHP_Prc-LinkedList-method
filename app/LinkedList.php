<?php

namespace App;

class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function add($index, $data)
    {
        if ($index == 0) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $current = $this->firstNode;
            $previous = $this->firstNode;

            for ($i = 0; $i < $index; $i++) {
                $previous = $current;
                $current = $current->link;
            }
            $previous->link = $node;
            $node->link = $current;
            $this->count++;
        }
        echo "Them thanh cong";
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->link = $this->firstNode;
            $this->firstNode = $node;
        }
        $this->count++;
        echo "Them vao dau thanh cong";
    }

    public function addLast($data)
    {
        if (!$this->firstNode) {
            $this->addFirst($data);
        } else {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $this->lastNode = $node;
            $this->count++;
            echo "Them vao cuoi thanh cong";
        }
    }

    public function remove($index)
    {
        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->data != $index) {
            if ($current->link == null) {
                return null;
            } else {
                $previous = $current;
                $current = $current->link;
            }
        }

        if ($current == $this->firstNode) {
            if ($this->count == 1) {
                $this->lastNode = $this->firstNode;
            }
            $this->firstNode = $this->firstNode->link;
        } else {
            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }
            $previous->link = $current->link;
        }
        $this->count--;
        echo "Xoa tai vi tri: " . $index . " thanh cong";
    }

    public function removeObj($obj)
    {
        if ($this->firstNode !== NULL) {
            $previous = NULL;
            $current = $this->firstNode;

            while ($current->link !== NULL) {
                if ($current->data === $obj) {
                    if ($previous === NULL) {
                        $this->firstNode = $current->link;
                    } else {
                        $previous->link = $current->link;
                    }
                    $this->count--;
                    echo "Xoa phan tu: " . $obj . " thanh cong";
                }
                $previous = $current;
                $current = $current->link;
            }
        }
        echo "Khong co phan tu can xoa";
    }

    public function get($index)
    {
        $current = $this->firstNode;
        $count = 0;

        while ($current != null) {
            if ($count == $index) {
                return $current->data;
            }
            $count++;
            $current = $current->link;
        }
        return false;

    }

    public function size(): int
    {
        return $this->count;
    }

    public function printList(): array
    {
        $listData = [];
        $current = $this->firstNode;

        while ($current != null) {
            array_push($listData, $current->data);
            $current = $current->link;
        }
        return $listData;
    }

    public function __clone()
    {
        return $copy = $this->printList();
    }

    public function contains($obj)
    {
        if ($this->firstNode !== null) {
            $current = $this->firstNode;
            while ($current->link !== null) {
                if ($current->data === $obj) {
                    return true;
                }
            }
        }
        return false;
    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->printList());
    }
}