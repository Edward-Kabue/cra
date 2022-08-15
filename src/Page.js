import React from 'react';
import PostContent from './components/PostContent';
import BlogList from './components/BlogList';
import BlogPost from './components/BlogPost';
import Assessment from './components/assessment';

const Page = ({ page }) => {
  if (page) {
    switch (page?.meta?.type) {
      case 'bloglist':
        return <BlogList blogs={page.data} />;
      case 'assessment':
        return <Assessment assessment={page.data} />;
      case 'blogpost':
        return <BlogPost blog={page} />;
      case 'page':
        return <PostContent content={page.content || []} />;
      default:
        console.error('Unknown content type.');
    }
  }
  return <></>;
};

export default Page;
