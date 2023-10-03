
<?php
class EditorNode
{
    public $text;
    public $prev;
    public $next;

    public function __construct($text)
    {
        $this->text = $text;
        $this->prev = null;
        $this->next = null;
    }
}

class TextEditor
{
    private $currentNode;

    public function __construct($initialText)
    {
        $this->currentNode = new EditorNode($initialText);
    }

    public function getCurrentText()
    {
        return $this->currentNode->text;
    }

    public function editText($newText)
    {
        // Create a new node for the edited content
        $newNode = new EditorNode($newText);

        // Link it to the current node
        $newNode->prev = $this->currentNode;
        $this->currentNode->next = $newNode;

        // Update the current node
        $this->currentNode = $newNode;
    }

    public function undo()
    {
        if ($this->currentNode->prev !== null) {
            $this->currentNode = $this->currentNode->prev;
        }
    }

    public function redo()
    {
        if ($this->currentNode->next !== null) {
            $this->currentNode = $this->currentNode->next;
        }
    }
}

// Usage example:
$textEditor = new TextEditor("Hello, World!");
$textEditor->editText("Hello, OpenAI!");
$textEditor->editText("Hello, ChatGPT!");
echo $textEditor->getCurrentText() . "\n"; // Output: Hello, ChatGPT!

$textEditor->undo();
echo $textEditor->getCurrentText() . "\n"; // Output: Hello, OpenAI!

$textEditor->redo();
echo $textEditor->getCurrentText() . "\n"; // Output: Hello, ChatGPT!