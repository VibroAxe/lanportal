<?php namespace Zeropingheroes\Lanager\Domain\Playlists;

use League\Fractal\TransformerAbstract;

class PlaylistTransformer extends TransformerAbstract {

	/**
	 * Transform resource into standard output format with correct typing
	 * @param  object BaseModel   Resource being transformed
	 * @return array              Transformed object array ready for output
	 */
	public function transform(Playlist $playlist)
	{
		return [
			'id'					=> (int) $playlist->id,
			'name'					=> $playlist->name,
			'description'			=> $playlist->description,
			'playback_state'		=> (int) $playlist->playback_state,
			'max_item_duration'		=> (int) $playlist->max_item_duration,
			'user_skip_threshold'	=> (int) $playlist->user_skip_threshold,
			'links'			=> [
				[
					'rel' => 'self',
					'uri' => (url().'/playlists/'. $playlist->id),
				]
			],
		];
	}
}