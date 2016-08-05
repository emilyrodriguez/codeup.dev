<?php
class Log{
	private $handle;
	// private $filename; 

	public function __construct($prefix = "log-") {
		$this->filename = "$prefix" . date("YYYY-mm-dd") . ".log";
		$this->handle = fopen($this->filename((string)$prefix), 'a');
	}
	private function filename($prefix) {
		$filename = "$prefix-" . date('Y-m-d') . '.log';
		if (!touch($filename) || !is_writable($filename)) {
			echo '$filename cannot be modified!';
		}
	}
	public function logMessage($level, $message) {
		$formatMessage = date("Y-m-d H:i:s") . " [$level] $message";
		fwrite($handle, $formatMessage);
	}
	public function __destruct() {
		fclose($this->handle);
	}
	public function info($message) {
		$this->logMessage("User $username logged in", $message);
	}
	public function error($message) {
		$this->logMessage("User $username failed to login", $message);
	}
}
?>