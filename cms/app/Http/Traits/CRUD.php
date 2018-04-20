<?php namespace App\Http\Traits;

use Illuminate\Http\Request;

/**
 * Trait CRUD
 * Contains default `all`, `get`, `add`, `update` and `delete` commands.
 * Set `const MODEL` to the model class string before loading. This does not work with multiple models.
 *
 * @package App\Http\Traits
 */
trait CRUD {
	public function all() {
		$m = self::MODEL;

		return $m::all();
	}

	public function get($id) {
		$m     = self::MODEL;
		$model = $m::find($id);
		if (is_null($model)) {
			return null;
		}

		return $model;
	}

	public function add(Request $request) {
		$m = self::MODEL;
		$result = $this->validate($request, $m::$rules);

		echo '<pre>' . print_r($result, true) . '</pre>';die();

		return $m::create($request->all());
	}

	public function put(Request $request, $id) {
		$m = self::MODEL;
		$this->validate($request, $m::$rules);
		$model = $m::find($id);
		if (is_null($model)) {
			return null;
		}
		$model->update($request->all());

		return $model;
	}

	public function remove($id) {
		$m = self::MODEL;
		if (is_null($m::find($id))) {
			return null;
		}
		$m::destroy($id);

		return true;
	}
}
