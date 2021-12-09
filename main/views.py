from django.shortcuts import render
from . models import Category, News,Comment
from django.contrib import messages

def home(request):
    first_news = News.objects.first()
    three_news = News.objects.all()[1:3]
    three_categories = Category.objects.all()[:3]
    context = {
        'first_news':first_news,
        'three_news':three_news,
        'three_categories':three_categories
    }
    return render(request,'main/home.html',context)

def all_news(request):
    all_news = News.objects.all()
    context = {
        'all_news':all_news
    }
    return render(request,'main/all-news.html',context)

def detail(request,id):
    news = News.objects.get(pk=id)
    if request.method == 'POST':
        name = request.POST['name']
        email = request.POST['email']
        comment = request.POST['message']
        Comment.objects.create(
            news=news,
            name=name,
            email=email,
            comment=comment
        )
        messages.success(request,'commented submitted')
    category = Category.objects.get(id=news.category.id)
    related_news = News.objects.filter(category=category).exclude(id=id)  
    comments=Comment.objects.filter(news=news,status=True).order_by('-id')
    # comments = Comment.objects.filter(news=news,status=False).order_by['-id']
    context = {
        'news':news,
        'related_news':related_news,
        'comments':comments
    }

    return render(request,'main/detail.html',context)

def all_categories(request):
    cats = Category.objects.all()
    context = {
        'cats':cats
    }
    return render(request,'main/all-categories.html',context)


def category(request,id):
    category = Category.objects.get(pk=id)
    news = News.objects.filter(category=category)
    context = {
        'category':category,
        'news':news
    }
    return render(request,'main/category.html',context)