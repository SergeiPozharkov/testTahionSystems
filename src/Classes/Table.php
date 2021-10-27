<?php

namespace App\Classes;

class Table
{
    protected array $data = [];
    protected array $headers = [];
    protected string $class = "";

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): static
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;

    }

    /**
     * @return string
     */
    public function render(): string
    {
        $html = "<table class='$this->class'>";
        if (!empty($this->headers)) {
            $html .= "<tr>";

            foreach ($this->headers as $header) {
                $html .= "<th>$header</th>";
            }
            $html .= "</tr>";
        }
        foreach ($this->data as $row) {

            $html .= "<tr>";
            foreach ($row as $column) {
                $html .= "<td>$column</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";

        return $html;

    }

    /**
     * @param callable $func
     * @return $this
     */
    public function addColumn(callable $func): static
    {
        foreach ($this->data as $key => $value) {
            $this->data[$key][] = $func($value);
        }
        return $this;
    }

}