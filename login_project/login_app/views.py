# login_app/views.py

from django.shortcuts import render

def login(request):
    return render(request, 'login_app/login.html')

def success(request):
    return render(request, 'login_app/success.html')