from django.contrib import admin
from . models import Category,Comment,News

admin.site.register(Category)

class NewsAdmin(admin.ModelAdmin):
    list_display = ('title','category','add_time')

admin.site.register(News,NewsAdmin)

class CommentAdmin(admin.ModelAdmin):
    list_display = ('news','email','comment','status')

admin.site.register(Comment,CommentAdmin)