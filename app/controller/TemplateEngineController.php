<?php


namespace app;


class TemplateEngineController
{
    /**
     * @var string
     */
    private $viewName;

    private $values = [];

    public function __construct(string $viewName)
    {
        $this->viewName = $viewName;
        $this->viewName="app/view/TPL/$viewName.tpl";
    }

    public function set(string $key,string $values = null)
    {
        $this->values[$key] = $values;
    }

    public function echooutput()
    {
        //check if file exist
        if (!file_exists($this->viewName))
        {
            die("file does not exist ($this->viewname)");
        }

        // read it
        $output = file_get_contents($this->viewName);

        //replace all tags with values

        foreach ($this->values as $key => $value)
        {
            $tagToReplace="[@$key]";
            $output = str_replace($tagToReplace, $value, $output);
        }

        echo $output;
    }

}