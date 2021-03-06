<?php
##
## Copyright 2013-2017 Opera Software AS
##
## Licensed under the Apache License, Version 2.0 (the "License");
## you may not use this file except in compliance with the License.
## You may obtain a copy of the License at
##
## http://www.apache.org/licenses/LICENSE-2.0
##
## Unless required by applicable law or agreed to in writing, software
## distributed under the License is distributed on an "AS IS" BASIS,
## WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
## See the License for the specific language governing permissions and
## limitations under the License.
##

/**
* Class that represents a request for key syncing
*/
class SyncRequest extends Record {
	/**
	* Defines the database table that this object is stored in
	*/
	protected $table = 'sync_request';

	/**
	* Mark this request as in progress
	*/
	public function set_in_progress() {
		$this->processing = true;
		$this->update();
	}
}
