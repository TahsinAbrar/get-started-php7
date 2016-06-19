<?php

interface Logger {
  public function log($message);
}


/*
 * Contract class for implementing Logger interface
 */
class TerminalLogger implements Logger
{

  public function log($message)
  {
    var_dump($message);
  }

}

/*
 * Application class
 */
class Application {

  protected $logger;

  public function setLogger(Logger $logger)
  {
    $this->logger = $logger;

    return $this;
  }

  public function action()
  {
    $this->logger->log("Doing things");
  }
}

/*
 * Now, instantiate the Application class with $app object
 * and inject an anonymous class on setLogger()
 */

$app = new Application;

$app->setLogger(new class implements Logger {
  public function log($message)
  {
    var_dump($message);
  }
});

$app->action();
