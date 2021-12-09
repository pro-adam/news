from django.urls import path
from . import views

urlpatterns = [
    path('',views.home,name='home'),
    path('all-news/',views.all_news,name='all_news'),
    path('detail/<int:id>/',views.detail,name='detail'),
    path('all-category/',views.all_categories,name='all_category'),
    path('category/<int:id>/',views.category,name='category'),
]
