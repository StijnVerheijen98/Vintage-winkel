<?php namespace App\Http\Traits;

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

	public function add($data = []) {
		$m = self::MODEL;
		$this->validate($data, $m::$rules);

		return $m::create($data);
	}

	public function put($data = [], $id) {
		$m = self::MODEL;
		$this->validate($data, $m::$rules);
		$model = $m::find($id);
		if (is_null($model)) {
			return null;
		}
		$model->update($data);

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
