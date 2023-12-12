# college_app/views.py

from django.http import HttpResponse

def home(request):
    return HttpResponse("Welcome to Nowrosjee Wadia College Pune")

def about_us(request):
    return HttpResponse("An Autonomous College under Savitribai Phule Pune University")