<?php
$interpreter = new Interpreter($argv[1]);
$interpreter->run();

class Interpreter {
    private $memory;
    private $pointer;
    private $commands;
    private $index;

    public function __construct($file_name) {
        $this->memory = array(0);
        $this->pointer = 0;
        $this->commands = $this->file_2_commands($file_name);
        $this->index = 0;
    }

    public function run() {
        while ($this->index < count($this->commands)) {
            switch ($this->commands[$this->index]) {
                case "~!":
                    $this->increase_pointer();
                    break;
                case "!~":
                    $this->decrease_pointer();
                    break;
                case "~~":
                    $this->increase_byte();
                    break;
                case "!!":
                    $this->decrease_byte();
                    break;
                case "~@":
                    $this->input();
                    break;
                case "@~":
                    $this->output();
                    break;
                case "@!":
                    $this->jump_forward();
                    break;
                case "!@":
                    $this->jump_backward();
                    break;
                default:
                    exit("Unknown command.\n");
            }
            $this->index += 1;
        }
    }

    private function file_2_commands($file_name) {
        if (!file_exists($file_name)) {
            exit("No such file.\n");
        }
        $file = fopen($file_name, "r");
        $text = fread($file, filesize($file_name));
        fclose($file);

        $text = str_replace(" ", "", $text);
        $text = str_replace("\t", "", $text);
        $text = str_replace("\r", "", $text);
        $text = str_replace("\n", "", $text);
        $text = str_replace("~", ".", $text);
        $text = str_replace("!", ".", $text);
        $text = str_replace("@", ".", $text);
        $text = str_replace("Premium", "@", $text);
        $text = str_replace("P", "~", $text);
        $text = str_replace("Hub", "!", $text);

        return str_split($text, 2);
    }

    private function increase_pointer() {
        $this->pointer += 1;
        if ($this->pointer >= count($this->memory)) {
            array_push($this->memory, 0);
        }
    }

    private function decrease_pointer() {
        $this->pointer -= 1;
        if ($this->pointer < 0) {
            $this->pointer = count($this->memory) - 1;
        }
    }

    private function increase_byte() {
        $this->memory[$this->pointer] += 1;
        $this->memory[$this->pointer] %= 256;
    }

    private function decrease_byte() {
        $this->memory[$this->pointer] += 255;
        $this->memory[$this->pointer] %= 256;
    }

    private function input() {
        $this->memory[$this->pointer] = ord(fread(STDIN, 1));
    }

    private function output() {
        echo chr($this->memory[$this->pointer]);
    }

    private function jump_forward() {
        $pair = 1;
        if ($this->memory[$this->pointer] == 0) {
            while ($pair > 0) {
                $this->index += 1;
                if ($this->index >= count($this->commands)) {
                    exit("Unmatched.\n");
                }
                if ($this->commands[$this->index] == "@!") {
                    $pair += 1;
                } elseif ($this->commands[$this->index] == "!@") {
                    $pair -= 1;
                }
            }
        }
    }

    private function jump_backward() {
        $pair = 1;
        if ($this->memory[$this->pointer] != 0) {
            while ($pair > 0) {
                $this->index -= 1;
                if ($this->index < 0) {
                    exit("Unmatched.\n");
                }
                if ($this->commands[$this->index] == "@!") {
                    $pair -= 1;
                } elseif ($this->commands[$this->index] == "!@") {
                    $pair += 1;
                }
            }
        }
    }
}
?>
