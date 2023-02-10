<div id="Modal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="modalForm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Add Ticket</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="subject" class="control-label">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Subject" required>			
					</div>						
					<div class="form-group">
						<label for="message" class="control-label">Description</label>							
						<textarea class="form-control" rows="5" id="description" name="description"></textarea>							
					</div>
                    <div class="form-group">
						<label for="subject" class="control-label">Attachments</label>
						<input type="file" class="form-control" id="img" name="img" placeholder="Subject" required>			
					</div>	
					<div class="form-group">
						<label for="status" class="control-label">Status</label>							
						<label class="radio-inline">
							<input type="radio" name="status" id="open" value="0" checked required>Open
						</label>
							<label class="radio-inline">
								<input type="radio" name="status" id="close" value="1" required>Close
							</label>	
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="ticketId" id="ticketId" />
					<input type="hidden" name="action" id="action" value="" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>