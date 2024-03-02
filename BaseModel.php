<?php


use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 *
 * @method static static create(array $attributes)
 * @method static static updateOrCreate(array $attributes, array $values = [])
 * @method static static upsert(array $values, array $uniqueBy, array $update = [])
 * @method static static firstOrNew(array $attributes, array $values = [])
 * @method static static firstOrCreate(array $attributes, array $values = [])
 *
 * @method static int destroy($ids)
 * @method static void truncate()
 * @method static \Illuminate\Database\Eloquent\Builder|static delete()
 *
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)
 *
 * @method static \Illuminate\Database\Eloquent\Collection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|static where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|static whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereHas($relation, $callback = null, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|static with($relations)
 * @method static \Illuminate\Database\Eloquent\Builder|static select($columns)
 * @method static \Illuminate\Database\Eloquent\Builder|static orderBy($column, $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|static limit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static offset($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static latest($column = null)
 * @method static \Illuminate\Database\Eloquent\Builder|static oldest($column = null)
 * @method static \Illuminate\Database\Eloquent\Builder|static first($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model|static|null find($id, $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model|static|null findOrFail($id, $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Collection|static[] findMany($ids, $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Model|static|null findOrNew($id, $columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|static firstWhere($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|static firstOrFail($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|static firstOr($columns = ['*'], $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder|static firstWhereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Eloquent\Builder|static firstOrWhere($column, $operator = null, $value = null)
 *
 * @mixin \Eloquent
 */
abstract class BaseModel extends Model
{

}
