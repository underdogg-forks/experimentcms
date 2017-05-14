<li class="sub-menu">
    <a href="{!! url('/home') !!}" class="nav-link nav-toggle {!! Request::is('home*') ? 'active' : '' !!}">
        <i class="fa fa-home"></i>
        <span class="title">Home</span>
    </a>
</li>
<li class="sub-menu">
    <a href="{!! route('backend.activityLogs.index') !!}"
       class="nav-link nav-toggle {!! Request::is('activityLogs*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ActivityLogs</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.announcements.index') !!}"
       class="nav-link nav-toggle {!! Request::is('announcements*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Announcements</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.relationAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('relationAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">RelationAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.relations.index') !!}"
       class="nav-link nav-toggle {!! Request::is('relations*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Relations</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.commentLikes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('commentLikes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">CommentLikes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.contacts.index') !!}"
       class="nav-link nav-toggle {!! Request::is('contacts*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Contacts</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.contractAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('contractAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ContractAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.contractRenewals.index') !!}"
       class="nav-link nav-toggle {!! Request::is('contractRenewals*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ContractRenewals</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.contracts.index') !!}"
       class="nav-link nav-toggle {!! Request::is('contracts*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Contracts</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.countries.index') !!}"
       class="nav-link nav-toggle {!! Request::is('countries*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Countries</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.currencies.index') !!}"
       class="nav-link nav-toggle {!! Request::is('currencies*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Currencies</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.customFields.index') !!}"
       class="nav-link nav-toggle {!! Request::is('customFields*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">CustomFields</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.customFieldsValues.index') !!}"
       class="nav-link nav-toggle {!! Request::is('customFieldsValues*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">CustomFieldsValues</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.departments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('departments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Departments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.dismissedAnnouncements.index') !!}"
       class="nav-link nav-toggle {!! Request::is('dismissedAnnouncements*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">DismissedAnnouncements</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.emailLists.index') !!}"
       class="nav-link nav-toggle {!! Request::is('emailLists*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">EmailLists</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.emailTemplates.index') !!}"
       class="nav-link nav-toggle {!! Request::is('emailTemplates*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">EmailTemplates</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.estimateActivities.index') !!}"
       class="nav-link nav-toggle {!! Request::is('estimateActivities*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">EstimateActivities</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.estimateItems.index') !!}"
       class="nav-link nav-toggle {!! Request::is('estimateItems*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">EstimateItems</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.estimateItemstaxes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('estimateItemstaxes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">EstimateItemstaxes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.estimates.index') !!}"
       class="nav-link nav-toggle {!! Request::is('estimates*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Estimates</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.events.index') !!}"
       class="nav-link nav-toggle {!! Request::is('events*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Events</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.expenses.index') !!}"
       class="nav-link nav-toggle {!! Request::is('expenses*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Expenses</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.goals.index') !!}"
       class="nav-link nav-toggle {!! Request::is('goals*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Goals</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoiceActivities.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoiceActivities*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoiceActivities</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoiceItems.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoiceItems*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoiceItems</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoiceItemsLists.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoiceItemsLists*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoiceItemsLists</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoiceItemsTaxes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoiceItemsTaxes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoiceItemsTaxes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoicePaymentRecords.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoicePaymentRecords*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoicePaymentRecords</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoicePaymentsModes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoicePaymentsModes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">InvoicePaymentsModes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.invoices.index') !!}"
       class="nav-link nav-toggle {!! Request::is('invoices*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Invoices</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.itemsRelateds.index') !!}"
       class="nav-link nav-toggle {!! Request::is('itemsRelateds*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ItemsRelateds</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.knowledgebases.index') !!}"
       class="nav-link nav-toggle {!! Request::is('knowledgebases*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Knowledgebases</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.knowledgebaseArticleAnswers.index') !!}"
       class="nav-link nav-toggle {!! Request::is('knowledgebaseArticleAnswers*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">KnowledgebaseArticleAnswers</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.knowledgebaseGroups.index') !!}"
       class="nav-link nav-toggle {!! Request::is('knowledgebaseGroups*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">KnowledgebaseGroups</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leadActivityLogs.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leadActivityLogs*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">LeadActivityLogs</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leadAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leadAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">LeadAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leads.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leads*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Leads</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leadsEmailIntegrations.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leadsEmailIntegrations*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">LeadsEmailIntegrations</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leadsEmailIntegrationEmails.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leadsEmailIntegrationEmails*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">LeadsEmailIntegrationEmails</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.leadsStatuses.index') !!}"
       class="nav-link nav-toggle {!! Request::is('leadsStatuses*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">LeadsStatuses</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.listEmails.index') !!}"
       class="nav-link nav-toggle {!! Request::is('listEmails*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ListEmails</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.mailListsCustomFields.index') !!}"
       class="nav-link nav-toggle {!! Request::is('mailListsCustomFields*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">MailListsCustomFields</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.mailListsCustomFieldValues.index') !!}"
       class="nav-link nav-toggle {!! Request::is('mailListsCustomFieldValues*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">MailListsCustomFieldValues</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.milestones.index') !!}"
       class="nav-link nav-toggle {!! Request::is('milestones*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Milestones</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.notes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('notes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Notes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.notifications.index') !!}"
       class="nav-link nav-toggle {!! Request::is('notifications*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Notifications</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.postAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('postAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">PostAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.postComments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('postComments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">PostComments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.postLikes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('postLikes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">PostLikes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.posts.index') !!}"
       class="nav-link nav-toggle {!! Request::is('posts*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Posts</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectActivities.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectActivities*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectActivities</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectDiscussionComments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectDiscussionComments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectDiscussionComments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectDiscussions.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectDiscussions*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectDiscussions</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectFiles.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectFiles*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectFiles</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectNotes.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectNotes*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectNotes</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projects.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projects*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Projects</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.projectSettings.index') !!}"
       class="nav-link nav-toggle {!! Request::is('projectSettings*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProjectSettings</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.proposalComments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('proposalComments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">ProposalComments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.proposals.index') !!}"
       class="nav-link nav-toggle {!! Request::is('proposals*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Proposals</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.reminders.index') !!}"
       class="nav-link nav-toggle {!! Request::is('reminders*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Reminders</span>
        <!--multi level menu end-->

        </ul>
        <!-- sidebar menu end-->
        </div>
        </aside>
        <!--sidebar end-->
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.rolePermissions.index') !!}"
       class="nav-link nav-toggle {!! Request::is('rolePermissions*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">RolePermissions</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.salesAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('salesAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">SalesAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staff.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staff*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Staff</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staffPermissions.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staffPermissions*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffPermissions</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staffTaskAssignees.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staffTaskAssignees*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffTaskAssignees</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staffTaskComments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staffTaskComments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffTaskComments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staffTasks.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staffTasks*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffTasks</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.staffTasksAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('staffTasksAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">StaffTasksAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.taskCheckLists.index') !!}"
       class="nav-link nav-toggle {!! Request::is('taskCheckLists*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TaskCheckLists</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.tasksTimers.index') !!}"
       class="nav-link nav-toggle {!! Request::is('tasksTimers*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TasksTimers</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.ticketAttachments.index') !!}"
       class="nav-link nav-toggle {!! Request::is('ticketAttachments*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TicketAttachments</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.ticketPipeLogs.index') !!}"
       class="nav-link nav-toggle {!! Request::is('ticketPipeLogs*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TicketPipeLogs</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.ticketReplies.index') !!}"
       class="nav-link nav-toggle {!! Request::is('ticketReplies*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TicketReplies</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.tickets.index') !!}"
       class="nav-link nav-toggle {!! Request::is('tickets*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">Tickets</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.ticketStatuses.index') !!}"
       class="nav-link nav-toggle {!! Request::is('ticketStatuses*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TicketStatuses</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.todoItems.index') !!}"
       class="nav-link nav-toggle {!! Request::is('todoItems*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">TodoItems</span>
    </a>
</li>


<li class="sub-menu">
    <a href="{!! route('backend.userAutoLogins.index') !!}"
       class="nav-link nav-toggle {!! Request::is('userAutoLogins*') ? 'active' : '' !!}">
        <i class="fa fa-edit"></i>
        <span class="title">UserAutoLogins</span>
    </a>
</li>


