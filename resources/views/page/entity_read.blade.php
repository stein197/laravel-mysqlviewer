<div class="d-flex js-split-pane crop" style="flex-grow:1">
	<section id="sidebar" class="split-pane" data-size="20">
		<x-sidebar/>
	</section>
	<section id="content" class="split-pane" data-size="80">
		<p class="fs-20 fw-bold">@lang("entity.type.{$type}.action.read") {{ $entity->id() }}</p>
		{!! $view->renderAction('read') !!}
	</section>
</div>
